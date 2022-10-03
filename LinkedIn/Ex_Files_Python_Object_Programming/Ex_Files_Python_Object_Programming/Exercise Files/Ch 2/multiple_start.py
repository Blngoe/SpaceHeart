# Python Object Oriented Programming by Joe Marini course example
# Understanding multiple inheritance


from re import S


class A:
    def __init__(self):
        super().__init__()
        self.foo = "foo"
        self.name = "Class A"


class B:
    def __init__(self):
        super().__init__()
        self.bar = "bar"
        self.name = "Class B"

class C(A, B):
    def __init__(self):
        super().__init__()

    def showProps(self):    
        print(self.foo)
        print(self.bar)
        print(self.name)



c = C()
c.showProps()

#this look into method
print(C.__mro__)