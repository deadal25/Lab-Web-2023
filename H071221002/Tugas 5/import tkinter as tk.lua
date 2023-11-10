import tkinter as tk
from tkinter import ttk

# Create an instance of Tkinter
root = tk.Tk()
root.title("Form Database")

# Set background color
root.configure(bg="light blue")  # You can change "light blue" to any color you prefer

# Create a Treeview to display the table
tree = ttk.Treeview(root, columns=("ID", "Nama", "Gaji", "Departemen", "Jabatan", "Tahun Masuk"))
tree.heading("#1", text="ID")
tree.heading("#2", text="Nama")
tree.heading("#3", text="Gaji")
tree.heading("#4", text="Departemen")
tree.heading("#5", text="Jabatan")
tree.heading("#6", text="Tahun Masuk")
tree.pack()

# Function to add data to the table
def tambah_data():
    id = entry_id.get()
    nama = entry_nama.get()
    gaji = entry_gaji.get()
    departemen = entry_departemen.get()
    jabatan = entry_jabatan.get()
    tahun_masuk = entry_tahun_masuk.get()
    tree.insert("", "end", values=(id, nama, gaji, departemen, jabatan, tahun_masuk))
    entry_id.delete(0, "end")
    entry_nama.delete(0, "end")
    entry_gaji.delete(0, "end")
    entry_departemen.delete(0, "end")
    entry_jabatan.delete(0, "end")
    entry_tahun_masuk.delete(0, "end")

# Create labels and entry fields for input data
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

label_tahun_masuk = tk.Label(root, text="Tahun Masuk:")
label_tahun_masuk.pack()
entry_tahun_masuk = tk.Entry(root)
entry_tahun_masuk.pack()

# Create a button to add data
tombol_tambah = tk.Button(root, text="Tambah Data", command=tambah_data)
tombol_tambah.pack()

root.mainloop()