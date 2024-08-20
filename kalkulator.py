class Kalkulator:
    def __init__(self):
        self.hasil = 0

    def penjumlahan(self, angka1, angka2):
        self.hasil = angka1 + angka2
        return self.hasil

    def pengurangan(self, angka1, angka2):
        self.hasil = angka1 - angka2
        return self.hasil

    def perkalian(self, angka1, angka2):
        self.hasil = angka1 * angka2
        return self.hasil

    def pembagian(self, angka1, angka2):
        if angka2 != 0:
            self.hasil = angka1 / angka2
            return self.hasil
        else:
            return "Tidak dapat membagi dengan nol!"

kalkulator = Kalkulator()

while True:
    print("\n=== Kalkulator Sederhana ===")
    print("1. Penjumlahan")
    print("2. Pengurangan")
    print("3. Perkalian")
    print("4. Pembagian")
    print("5. Keluar")

    pilihan = input("Pilih operasi (1/2/3/4/5): ")

    if pilihan == '5':
        print("Keluar dari program.")
        break

    angka1 = float(input("Masukkan angka pertama: "))
    angka2 = float(input("Masukkan angka kedua: "))

    if pilihan == '1':
        print("Hasil:", kalkulator.penjumlahan(angka1, angka2))
    elif pilihan == '2':
        print("Hasil:", kalkulator.pengurangan(angka1, angka2))
    elif pilihan == '3':
        print("Hasil:", kalkulator.perkalian(angka1, angka2))
    elif pilihan == '4':
        print("Hasil:", kalkulator.pembagian(angka1, angka2))
    else:
        print("Pilihan tidak valid, coba lagi.")