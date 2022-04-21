text = "X-DSPAM-Confidence:    0.8475"
splText = text.split()
nmbr= ""
# print (dir(splText))

for i in splText:
    print(i)
    if i.isdigit():
        print("true")
        nmbr = nmbr + i
print(nmbr, "sahsa")
# strpText = text.rstrip()
# print (splText)
# print(strpText)

