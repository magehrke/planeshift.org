#!/usr/bin/python
# -*- coding: utf-8 -*-

import sys

def parse_file ( skill, table, file ):
	print"parsing file '" + file + "'..."
	out_name = file[ : file.find(".") ] + ".txt2"
	table = " using " + table + " Table (combine)."
	try:
		book = open ( file, "r")
	except:
		print "could not open '" + file + "' for reading."
		exit (2)
	try:
		out = open ( out_name, "w")
	except:
		print "could not open '" + out_name + "' for writing."
		exit (2)
	book_name = file[ : file.find(".") ]
	line_number = 0
	for l in book:
		line_number += 1
		line = l.strip ()
		if line == "" or line[0] == '-':
			continue
		tokens = line.split();
		if ( tokens[0] == "Combine" ):
			line = line [ : len(line)-1 ]
			line += table
		out.write ( skill + " I 200 " + line + "\n" )
	# add_book ()

#---------------------------------------------------------------------
#   MAIN
#---------------------------------------------------------------------
if len ( sys.argv ) < 4 :
	print sys.argv[0] + " skill table [files]"
	sys.exit(1)
for i in range ( 3, len ( sys.argv ) ):
	parse_file ( sys.argv[1], sys.argv[2], sys.argv[i] )

