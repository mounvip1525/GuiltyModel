
; You may customize this and other start-up templates; 
; The location of this template is c:\emu8086\inc\0_com_template.txt

org 100h
MOV [1000H], 9BCEH
MOV [1002H], 0396H
MOV AX, [1000H]
MOV BX, [1002H]
ADD AX,BX



