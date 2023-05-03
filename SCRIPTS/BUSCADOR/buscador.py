import sys
import os

def lista_archivos(ruta):
	archivos = ""
	for nombre_archivo in os.listdir(ruta):
		archivos += nombre_archivo+","
	    # ruta_archivo = os.path.join(ruta, nombre_archivo)
	    # if os.path.isfile(ruta_archivo):
	    #     archivos.append(ruta_archivo)
	return archivos


def BUSCADOR(carpeta):
        url = 'C:\\Users\\carlo\\OneDrive\\Documentos\\SCRIPTS\\'
        if carpeta == 'GOOGLE':
        	print(lista_archivos(url+"GOOGLE\\"))
        if carpeta == 'FACEBOOK':
        	print(lista_archivos(url+"FACEBOOK\\"))
        if carpeta == 'RETORNOS':
        	print(lista_archivos(url+"RETORNOS\\"))




if __name__ == '__main__':
	for arg in sys.argv:
		BUSCADOR(arg)
