'''
This is a Lambda function adapted from sample SMS function.


I have no clue why. If it does not work, it has to do something about this:
------------------
It needs one permission sns:Publish. The following policy
allows SNS publish to SMS but not topics or endpoints.
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Effect": "Allow",
            "Action": [
                "sns:Publish"
            ],
            "Resource": [
                "*"
            ]
        },
        {
            "Effect": "Deny",
            "Action": [
                "sns:Publish"
            ],
            "Resource": [
                "arn:aws:sns:*:*:*"
            ]
        }
    ]
}
----------------------

The following JSON template shows what is sent as the payload:
{
    "deviceInfo": {
        "deviceId": "GXXXXXXXXXXXXXXX",
        "type": "button",
        "remainingLife": 98.7,
        "attributes": {
            "projectName": "Sample-Project",
            "projectRegion": "us-west-2",
            "placementName": "Room-1",
            "deviceTemplateName": "lightButton"
        }
    },
    "deviceEvent": {
        "buttonClicked": {
            "clickType": "SINGLE",
            "reportedTime": 1521159287205
        }
    },
    "placementInfo": {
        "projectName": "Sample-Project",
        "placementName": "Room-1",
        "attributes": {
            "key1": "value1"
        },
        "devices": {
            "lightButton":"GXXXXXXXXXXXXXXX"
        }
    }
}
A "LONG" clickType is sent if the first press lasts longer than 1.5 seconds.
"SINGLE" and "DOUBLE" clickType payloads are sent for short clicks.
For more documentation, follow the link below.
http://docs.aws.amazon.com/iot/latest/developerguide/iot-lambda-rule.html
'''

from __future__ import print_function

# import boto3
import json
import logging
import requests

logger = logging.getLogger()
logger.setLevel(logging.INFO)

# sns = boto3.client('sns')
SECRET = "CHWjuwEL44nqdR6YPKSAqKpTbtWkWvmuLaKeqxqfUg4gNwsgzh4FSYnyezkhjQyXr5F9vxnHNrEUp3khTdt"


def lambda_handler(event, context):

    logger.info('Received event: ' + json.dumps(event))

    # Parsing of variables from click event
    attributes = event['placementInfo']['attributes']
    phone_number = attributes['phoneNumber']
    # message = attributes['message']
    # for key in attributes.keys():
    #     message = message.replace('{{%s}}' % (key), attributes[key])
    # message = message.replace('{{*}}', json.dumps(attributes))

    # The important attribute, DNS contains the button ID
    dsn = event['deviceInfo']['deviceId']

    # Other Less important attribute
    click_type = event['deviceEvent']['buttonClicked']['clickType']
    # message += '\n(DSN: {}, {})'.format(dsn, click_type)

    r = requests.get('https://blio.tech/API/button_click/'+ dsn +"/"+SECRET)
    logger.info(r.text)
    # sns.publish(PhoneNumber=phone_number, Message=message)

    # logger.info('SMS has been sent to ' + phone_number)