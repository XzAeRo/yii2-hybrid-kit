FROM mongo

COPY init.json /init.json
CMD mongoimport --host mongo --db yii2-hybrid-kit --collection MyDummyCollection --type json --file /init.json --jsonArray
