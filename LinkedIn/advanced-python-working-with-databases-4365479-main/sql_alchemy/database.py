import sqlalchemy

engine = sqlalchemy.create_engine('sqlite:///movies.db', echo=True)
# 1.
# with engine.connect() as con:
#     result = con.execute(sqlalchemy.text("SELECT * FROM movies"))
    
#     for row in result:
#         print(row)
# 2.
metadata = sqlalchemy.MetaData()

movies_table = sqlalchemy.Table("movies", metadata,
                                 sqlalchemy.Column("title", sqlalchemy.Text),
                                 sqlalchemy.Column("director", sqlalchemy.Text),
                                 sqlalchemy.Column("year", sqlalchemy.Integer))
metadata.create_all(engine)

with engine.connect as conn:
    for row in conn.execute(sqlalchemy.select(movies_table)):
        print(row)