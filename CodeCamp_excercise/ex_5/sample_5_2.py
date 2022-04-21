smallest = None
largest = None
while True:
    num = input("Enter a number: ")
    if num == "done":
        break
    try:
        value = int (num)       # "int" used to show only whole number
    except:
        print("Invalid input")
        continue

    if smallest is None:
        print(smallest, "1a")
        if largest is None:   # twice indented so it goest 1st smallest then largest to whole loop
            print(largest, "2b")
            smallest = value
            print(smallest, "3c")
            largest = value
            print(largest, "4d")

    elif smallest > value:
        #kung ang smallest ay mas malaki sa value
        print(smallest, "5e")
        print(smallest > value)
        smallest = value
        print(smallest, "6f")
    elif largest < value:
        print(largest, "7g")
        largest = value
        print(largest, "8h")

print("Maximum is", largest)
print("Minimum is",smallest)