import os

directorio = './img/'  # Reemplaza con la ruta de tu directorio
archivos = os.listdir(directorio)

# Función para obtener la extensión de un archivo
def obtener_extension(nombre):
    return os.path.splitext(nombre)[1]

# Renombrar archivos de manera incremental
i = 1
for archivo in archivos:
    nombre_base, extension = os.path.splitext(archivo)
    nuevo_nombre = f'img_{i}{extension}'
    os.rename(os.path.join(directorio, archivo), os.path.join(directorio, nuevo_nombre))
    i += 1
