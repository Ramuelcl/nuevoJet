@echo off
REM Descargar el instalador de Node.js
powershell -Command "Invoke-WebRequest 'https://nodejs.org/dist/v18.16.0/node-v18.16.0-x64.msi' -OutFile 'node-installer.msi'"

REM Instalar Node.js
msiexec /i node-installer.msi /quiet /norestart

REM Verificar la instalación
node -v
npm -v

REM Eliminar el instalador descargado
del node-installer.msi

echo Instalación completada.
pause
