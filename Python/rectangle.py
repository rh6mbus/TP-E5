class Rectangle:
    def __init__(self, a, b):
        self.a = a
        self.b = b

    def surface(self):
        return self.a * self.b

# Programme de test
R = Rectangle(2, 3)
print(R.surface())
