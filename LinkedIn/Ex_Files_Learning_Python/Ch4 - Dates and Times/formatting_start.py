#
# Example file for formatting time and date output
# LinkedIn Learning Python course by Joe Marini
#


from datetime import datetime, date

def main():
    # Times and dates can be formatted using a set of predefined string
    # control codes 
    now = datetime.now()

    
    #### Date Formatting ####
    #  13-Mar-2020 16:42:58
    # %y/%Y - Year, %a/%A - weekday, %b/%B - month, %d - day of month
    print(now.strftime("The current year is: %Y" ))
    print(now.strftime("%a, %d %b %y"))
    print(now.strftime("%d-%b-%Y %H:%M:%S"))
    # %c - locale's date and time, %x - locale's date, %X - locale's time
    print(now.strftime("Local date and time %c"))
    print(now.strftime("Local date %x"))
    print(now.strftime("Local time %X"))

    #### Time Formatting ####
    
    # %I/%H - 12/24 Hour, %M - minute, %S - second, %p - locale's AM/PM
    print(now.strftime("Current time %I:%M:%S %p"))
    print(now.strftime("Current time %H:%M"))


    today=date.today()
    days=["Mon","Tue","Wed","Thu","Fri","Sat","Sun"]
    print("Tomorrow will be "+days[(today.weekday()+1)%7])
    today=date.today()
    days=["Mon","Tue","Wed","Thu","Fri","Sat","Sun"]
    print("Tomorrow will be "+days[today.weekday()+1])
if __name__ == "__main__":
    main()
