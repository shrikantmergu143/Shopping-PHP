def odd_even(l):
    odd=[]
    even=[]
    
    for i in l:
        if i%2 == 0:
            even.append(i)
        else:
            odd.append(i)
    ouput = [odd,even]
    return output

li=[1,2,3,4,5,6,7]
print(odd_even(li))