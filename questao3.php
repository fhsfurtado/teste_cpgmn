<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <div>
        <div>
            <input type="text" name="texto" id="texto">
            <button type="button" id="execute">testar</button>
        </div>
        <div id="resultado">

        </div>
    </div>
    
</body>
<script type="text/javascript">
    
    document.getElementById("execute").addEventListener("click",testAnagram);

    function testAnagram(){
        let texto = document.getElementById('texto');
        document.getElementById("resultado").textContent = 'resultado: '+encontrarAnagramas(texto.value);
        console.log(encontrarAnagramas(texto.value));
    }

    function eAnagrama(str1, str2) {
        const hist = {}

        for (let i = 0; i < str1.length; i++) {
            const char = str1[i]
            if (hist[char]) {
                hist[char]++
                console.log('if1 '+hist[char])
            } else {
                hist[char] = 1
                console.log('else1 '+hist[char])

            }
        }

        for (let j = 0; j < str2.length; j++) {
            const char = str2[j]
            if (hist[char]) {
                hist[char]--
                console.log('if2 '+hist[char])
            } else {
                console.log('else2 é falso')
                return false
            }
        }

        return true
    }

    function lerSubs(str) {
        let i, j, result = [];

        for (i = 0; i < str.length; i++) {
            for (j = i + 1; j < str.length + 1; j++) {
                result.push(str.slice(i, j))
            }
        }
        return result
    }

    function contarAnagramas(currentIndex, arr) {
        const currentElement = arr[currentIndex]
        const arrRest = arr.slice(currentIndex + 1)
        let counter = 0

        for (let i = 0; i < arrRest.length; i++) {
            if (currentElement.length === arrRest[i].length && eAnagrama(currentElement, arrRest[i])) {
                counter++
            }
        }

        return counter
    }

    function encontrarAnagramas(s) {
        const duplicatesCount = s.split('').filter((v, i) => s.indexOf(v) !== i).length

        if (!duplicatesCount){
            return 0;
        } else{
            let anagramsCount = 0

            const arr = lerSubs(s)

            for (let i = 0; i <= arr.length; i++) {
                anagramsCount += contarAnagramas(i, arr)
            }

            return anagramsCount
        }
    }
</script>
</html>