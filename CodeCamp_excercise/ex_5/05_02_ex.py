minnum = None
maxnum = None

while True:
    sval = input('Enter a number:')
    if sval == 'done':
        break
    try:
        fval = int(sval)
        
    except:
        print('Invalid input')
        continue
    if maxnum == None or fval >maxnum: 
        maxnum = fval
    if minnum == None or fval <minnum: 
        minnum = fval

print('Maximum is',maxnum)
print('Minimum is',minnum)
