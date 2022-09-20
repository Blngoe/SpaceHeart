# Python Object Oriented Programming by Joe Marini course example
# Using instance methods and attributes


from re import S


class Book:
    # the "init" function is called when the instance is
    # created and ready to be initialized
    def __init__(self, title, author, page, price):
        self.title = title
        # TODO: add properties
        self.author = author
        self.page = page
        self.price = price
        
    # TODO: create instance methods
    def getPrice(self):
        return self.price


# TODO: create some book instances
b1 = Book("War and Peace", "Leo Tolstoy", 1225, 39.95)
b2 = Book("The Catcher in the Rye", "JD Salinger", 234, 29.95)

# TODO: print the price of book1
print(b1.price)


# TODO: try setting the discount


# TODO: properties with double underscores are hidden by the interpreter
