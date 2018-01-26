# Read in date 
import sys
import os
import re
  
def RemoveChar():

	with open('data/2017_TechSalary-US-temp.csv', "r") as datefile:
		data = datefile.read()  # Read the contents of the file into memory.
	salarylist = data.splitlines()

	# Remove dupliacte records by address
	filename = 'NewSalary.csv'
	outfile = open(filename,'w')
	
	i = 0
	for line in salarylist:
		line =  re.sub(r'[^\w]', ',', line)
		print line	
		outfile.write(line + '\n')
		i = i + 1
	
	outfile.close()
	
	return i

def main(argv):

	# Read data from Aldp
	try:
		
		NumRecords = 0
		# char  = sys.argv[1]
		NumRecords = RemoveChar()
		
		print 'Number of salaries',NumRecords
		
	except ValueError:
		print "Oops!  That was not a valid URL.  Try again..."
		raise 
	
		
# Initiate main program	
if __name__ == "__main__":
    main(sys.argv)
