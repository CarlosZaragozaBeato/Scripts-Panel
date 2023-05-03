import sys
import os

def lista_archivos(ruta):
	archivos = ""
	for nombre_archivo in os.listdir(ruta):
	     ruta_archivo = os.path.join(ruta, nombre_archivo)
	     if os.path.isfile(ruta_archivo):
	     	archivos += nombre_archivo+","
	return archivos


def BUSCADOR(carpeta):
        valores = carpeta.split(";")

        
        url = 'C:/Users/carlo/OneDrive/Documentos/SCRIPTS/'+valores[1]+"/"+valores[0]
        print(lista_archivos(url))



if __name__ == '__main__':
	for arg in sys.argv:
		BUSCADOR(arg)

