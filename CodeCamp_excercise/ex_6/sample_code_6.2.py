data = 'From boleng09@gmail.com Sat Jan 5 09:14:22 2009'
atpos = data.find('@')
print(atpos)
spos = data.find(' ', atpos)
print(spos)

host = data[atpos+1: spos]
print(host)