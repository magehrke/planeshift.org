#!/bin/bash

for i in *.pcapng
do
	f=`echo $i | cut -d "." -f 1`
	f=$f".txt"
	strings "$i" > "$f"
	echo "$f"
done
