DATA SEGMENT 
    BLOCK1 DB 'MADAM'
    MSG1 DB "IT IS A PALINDROME $"
    MSG2 DB "IT IS NOT A PALINDROME $"
    PAL DB 00H
    DATA ENDS
PRINT MACRO MSG
    MOV AH, 09H
    LEA DX, MSG
    INT 21H
    INT 3H
ENDM
EXTRA SEGMENT
    BLOCK2 DB 5 DUP(?)
    EXTRA ENDS
CODE SEGMENT 
    ASSUME CS:CODE,DS:DATA,ES:EXTRA
    START:MOV AX, DATA
    MOV DS, AX
    MOV AX, EXTRA
    MOV ES, AX
    LEA SI, BLOCK1
    LEA DI, BLOCK2+4
    MOV CX, 00005H
    BACK:CLD
    LODSB
    STD
    STOSB
    LOOP BACK
    LEA SI, BLOCK1
    LEA DI, BLOCK2
    MOV CX, 0005H
    CLD
    REPZ CMPSB
    JNZ SKIP
    LEA DX, MSG1
    MOV AH, 09H
    INT 21H
    MOV AH, 4CH
    INT 21H
    SKIP:LEA DX, MSG2    
    MOV AH, 09H
    INT 21H
    MOV AH, 4CH
    INT 21H
    CODE ENDS
END START




