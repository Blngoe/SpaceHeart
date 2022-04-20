hn = open('mbox-short.txt')
for line in hn:
	line = line.rstrip()
	wrd = line.split()

	if len(wrd) < 3 or wrd[0] !='From':
		continue
	print('Find word: ',wrd[2])
#comment push and pull