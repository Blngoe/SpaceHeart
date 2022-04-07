def computePay(hours, rate):
    if hours <= 40:
        gross_pay = hours * rate
        print(gross_pay)
    else:
        ot = (hours - 40) * (rate * 0.5)
        pay_rate = hours * rate
        gross_pay = pay_rate + ot
    return gross_pay    
hr = input('Enter Hours:' )
rt = input('Enter Rate:')
hours = float(hr)
rate = float(rt)

cll = computePay(hours, rate)
print('Pay', cll)
