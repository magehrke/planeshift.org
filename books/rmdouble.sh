#!/bin/bash

for i in *.txt2
do
	f=`echo $i | cut -d "." -f 1`
	f=$f".txt"
	sort "$i" | uniq > "$f"
	echo "$f"
done
