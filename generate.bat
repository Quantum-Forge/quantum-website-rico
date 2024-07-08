@echo off
REM Ganti "D:\website-rico dengan direktori tujuanmu
set "source_directory=D:\website-rico"

REM Pindah ke direktori tujuan
cd /d "%source_directory%"

REM Loop melalui semua file .php dan ubah menjadi .php
for %%f in (*.php) do (
    ren "%%f" "%%~nf.php"
)

echo Semua file HTML telah diubah menjadi PHP.
pause
