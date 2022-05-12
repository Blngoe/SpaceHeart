from gettext import find
from posixpath import split


fname = input('Enter File Name:')
nameWex= 'ex_7/'+fname
fhand = open(nameWex)
for line in fhand:
    
	if not line.startswith("X-DSPAM-Confidence:"):
    		
    	
		continue
	listLine = line.find(':')
	new_list = listLine.strip()
	print(listLine)
	# print(listLine)
	# print(dir(line))
	# print(type(line))
	# for x in line:
    # 		print(x, 'here')
	
print('Done')