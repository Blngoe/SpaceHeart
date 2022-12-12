from itertools import combinations
N = int (input())
#print (N)
L = input().split()
# print(L)

K = int(input())

C = list(combinations(L,K))
F = filter (lambda c : 'b' in c, C)
print('{0: .3}'.format(len(list(F))/len(C)))