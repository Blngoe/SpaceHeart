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
    if minnum == None and maxnum == None:
        minnum = fval
        maxnum = fval
    elif fval > maxnum:
        maxnum = fval
    elif fval < minnum: 
        minnum = fval

print('Maximum is', maxnum)
print('Minimum is', minnum)

