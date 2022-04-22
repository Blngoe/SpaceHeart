fruit = "banana"
index = 0
while index < len(fruit):
    letter = fruit[index]
    print(index, letter)
    index = index + 1
 
for ltter in fruit:
    print(ltter)

count = 0
for lttr in fruit:
    if lttr == 'a':
        count = count + 1
    print(count,"banana")