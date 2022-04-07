
hours = input('Enter Hours: ')
rate = input('Enter Rate: ')
try:
    f_hours = float(hours)
    f_rate = float(rate)
except:
    print('')
if f_hours > 40:
    bonus = (f_hours - 40) * (f_rate *0.5)
    pay = f_rate * f_hours
    pay_with_bonus = pay + bonus
    print(pay_with_bonus)
else:
    pay = f_hours * f_rate
    print(pay)