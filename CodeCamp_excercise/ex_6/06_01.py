text = "X-DSPAM-Confidence:    0.8475"
print(dir(str(text)))
fndText = text.find(' ')
nmber = text[fndText: ]
stpText = float(nmber.strip())
print(type(stpText))
print(stpText)


# print (dir(splText))

# for i in splText:
#     print(i)
#     if i.isdigit():
#         print("true")
#         nmbr = nmbr + i
# print(nmbr, "sahsa")
# strpText = text.rstrip()
# print (splText)
# print(strpText)

