#include <stdio.h>

UINT32 Func1(UINT32 p1, UINT64 p2)
{
    UINT32 a;
    UINT64 b;
    UINT32 c = 1;
    UINT64 d = 2;

    a = 0xffffffffffffffff;
    b = 0;
    a = b;
    c = a;
    d = b;
    d = a;

    return 0;
}

UINT32 Func2(UINT32 p1, UINT64 p2)
{
    UINT32 a;
    UINT64 b;
    UINT32 c = 1;
    UINT64 d = 2;

    a = 0xffffffffffffffff;
    b = 0;
    a = b;
    c = a;
    d = b;
    d = a;

    return 0;
}