class Employe:
    def __init__(self, nom, anciennete, salaire_de_base):
        self.nom = nom
        self.anciennete = anciennete
        self.salaire_de_base = salaire_de_base

    def get_salaire(self):
        # Calcul du salaire en fonction de l'ancienneté
        prime_anciennete = self.anciennete * 100  # Par exemple, 100 euros par année d'ancienneté
        salaire_total = self.salaire_de_base + prime_anciennete
        return salaire_total

    # Getters et Setters
    def get_nom(self):
        return self.nom

    def set_nom(self, nom):
        self.nom = nom

    def get_anciennete(self):
        return self.anciennete

    def set_anciennete(self, anciennete):
        self.anciennete = anciennete

    def get_salaire_de_base(self):
        return self.salaire_de_base

    def set_salaire_de_base(self, salaire_de_base):
        self.salaire_de_base = salaire_de_base


# Exemple d'utilisation
employe = Employe("Jean", 5, 2000)
print("Le salaire de", employe.get_nom(), "est :", employe.get_salaire(), "euros")