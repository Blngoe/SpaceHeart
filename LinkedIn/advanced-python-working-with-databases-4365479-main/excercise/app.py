import sqlite3

connection = sqlite3.connect('movies.db')

cursor = connection.cursor()
# 1.
# cursor.execute('''CREATE TABLE IF NOT EXISTS Movies
#                (Title TEXT, Director TEXT, year INT)''')
# 2.
# cursor.execute('''INSERT INTO Movies VALUES('Taxi Driver', 'Martin Scorsese', 1976)''')
# cursor.execute('''SELECT * FROM movies''')
# 3.
# famousFilms = [('Pulp Fiction', 'Quentin Tarantino', 1994),
#                 ('Back to the Futubre', 'RObert Zemeckis', 1985),
#                 ('Moonrise Kingdom', 'Wes Andersen', 2021)]
# cursor.executemany('INSERT INTO movies VALUES (?,?,?)', famousFilms)
# cursor.execute('''SELECT * FROM movies''')
# print(cursor.fetchall())
# 4.
release_year = (1985,)
cursor.execute('SELECT * FROM movies WHERE year=?', release_year)
print('data here',cursor.fetchall())

connection.commit()
connection.close()