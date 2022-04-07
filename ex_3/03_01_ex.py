
hours = input('Enter Hours: ')
rate = input('Enter Rate: ')
f_hours = float(hours)
f_rate = float(rate)
if f_hours > 40:
    bonus = (f_hours - 40) * (f_rate *0.5)
    print(bonus)
    pay = f_rate * f_hours
    print(pay)
    pay_with_bonus = pay + bonus
    print('Pay with bonus', pay_with_bonus)
else:
    pay = f_hours * f_rate
    print('Pay: ', pay)



