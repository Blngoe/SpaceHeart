def arithmetic_arranger(problems):
    if len(problems) > 5:
        return "Error: Too many problems."  
    arranged_problems = ""
    for index, value in enumerate(problems):
        operation = value.split(" ")

        if operation[1] not in "+-":
            return "Error: Operation must be '+' or '-'." 

        if len(operation[0]) > 4 or len(operation[2]) > 4:
            return"len(operation[0]) >4"
        try:
            value1 = int(operation[0])
            value2 = int(operation[2])
        except ValueError:
            return "Error: Numbers must only contain digits."

    #calculate the lenght of each line
        longest_val = max(len(operation[0]), len(operation[2]))
        width = longest_val + 2

        output = f"{operation[0]:>width}\n{f'{operation[1]} {operation[2]}':>width}\n{'-'*width}"


        temp_problem = f"""{value1} {operation[1]} {value2}"""
    arranged_problems = temp_problem
    return arranged_problems 