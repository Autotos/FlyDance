# /usr/bin/env python
import os

_TYPE = [b'UINT32', b'UINT64']

global index


def get_word(_content):
    global index
    word = b''
    while True:
        c = _content[index:index + 1]
        if b'a' <= c <= b'z' or b'A' <= c <= b'Z' or b'0' <= c <= b'9' or b'_' == c:
            word += c
            index += 1
        elif c in [b' ', b'\t'] and not word:
            index += 1
        else:
            if word:
                return word
            else:
                index += 1
                return c


def parser_func(path):
    if not path:
        return None

    global index
    index = 0
    words = []
    with open(path, 'rb') as fr:
        _content = fr.read()
    while index < len(_content):
        word = get_word(_content)
        words.append(word)
    print(words)
    index = 0
    while True:
        if b'#' == words[index]:
            index += 1
            if b'include' == words[index]:






if __name__ == '__main__':
    parser_func(r'F:\Code\python_example\02\test.c')
