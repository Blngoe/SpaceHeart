num =0
total = 0
while True:
    sval = input('Enter a number:')
    if sval == 'done':
        break
    try:
        fval = float(sval)
    except:
        print('invalid input')
        continue
    print(fval)
    num = num +1
    total = total + fval
print('All Done')
print(total,num, total/num)