#!/bin/bash

# Database: tester
# User: tester
# Password: tester2

# Tables structure
# id(PK), name(varchar255), email(varchar100), subject(varchar255), body(text)

IFS=,

while read name email subject body
	do 
		echo "INSERT INTO contacts (id, name, email, subject, body) VALUES (null,'$name', '$email', '$subject', '$body');"

done < contacts.csv | mysql -utester -ptester2 tester;
