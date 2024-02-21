class Book:
    def __init__(self, titre, auteur, prix):
        self.titre = titre
        self.auteur = auteur
        self.prix = prix

    def view(self):
        print("Titre :", self.titre)
        print("Auteur :", self.auteur)
        print("Prix : $", self.prix)

# Programme de test
livre = Book("Marius", "Marius", 30)
livre.view()
