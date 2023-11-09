import tkinter as tk
from tkinter import ttk

# Buat instance Tkinter
root = tk.Tk()
root.title("Form Database")
n
# Buat Treeview untuk menampilkan tabel
tree = ttk.Treeview(root, columns=("ID", "Nama", "Gaji", "Departemen", "Jabatan"))
tree.heading("#1", text="ID")
tree.heading("#2", text="Nama")
tree.heading("#3", text="Gaji")
tree.heading("#4", text="Departemen")
tree.heading("#5", text="Jabatan")
tree.pack()

# Buat fungsi untuk menambahkan data ke tabel
def tambah_data():
    id = entry_id.get()
    nama = entry_nama.get()
    gaji = entry_gaji.get()
    departemen = entry_departemen.get()
    jabatan = entry_jabatan.get()
    tree.insert("", "end", values=(id, nama, gaji, departemen, jabatan))
    entry_id.delete(0, "end")
    entry_nama.delete(0, "end")
    entry_gaji.delete(0, "end")
    entry_departemen.delete(0, "end")
    entry_jabatan.delete(0, "end")

# Buat label dan entry untuk input data
label_id = tk.Label(root, text="ID:")
label_id.pack()
entry_id = tk.Entry(root)
entry_id.pack()

label_nama = tk.Label(root, text="Nama:")
label_nama.pack()
entry_nama = tk.Entry(root)
entry_nama.pack()

label_gaji = tk.Label(root, text="Gaji:")
label_gaji.pack()
entry_gaji = tk.Entry(root)
entry_gaji.pack()

label_departemen = tk.Label(root, text="Departemen:")
label_departemen.pack()
entry_departemen = tk.Entry(root)
entry_departemen.pack()

label_jabatan = tk.Label(root, text="Jabatan:")
label_jabatan.pack()
entry_jabatan = tk.Entry(root)
entry_jabatan.pack()

# Buat tombol untuk menambahkan data
tombol_tambah = tk.Button(root, text="Tambah Data", command=tambah_data)
tombol_tambah.pack()

root.mainloop()