<h3>open_challenge</h3>

![스크린샷(88)](https://github.com/PM950704/Web-Programming/assets/127920204/4c8575c8-6a7c-44dd-8181-3a346f11dffc) </br>

![스크린샷(89)](https://github.com/PM950704/Web-Programming/assets/127920204/f8c558f8-ee8b-44e6-99ae-079ab32d2b39)<br>

숫자 입력을 받게되면 해당 숫자만큼 계단식으로 *를 출력하는 코드이다.<br>
입력을 받게되면 문자열로 받기 때문에 parseInt()를 해줘야 정수로 변환된다.<br>
숫자가 아닐 때는 입력 오류를 출력해줘야 하기 때문에 입력을 isNaN()함수로 확인한다.<br>


<h3>6-1</h3></br>

![스크린샷(90)](https://github.com/PM950704/Web-Programming/assets/127920204/960b5642-e1ab-4441-9797-746232838934)<br>

해당 div태그로 감싸져 있는 텍스트에 마우스를 올리면 div태그의 background가 노란색으로 바뀌게 &lt;script&gt;에서 작성해주었다.<br>


<h3>6-2</h3></br>

![스크린샷(91)](https://github.com/PM950704/Web-Programming/assets/127920204/d862828e-cc00-49be-9af2-bda7298e5623)<br>

&lt;script&gt;에서도 출력할 수 있는 document.write()를 이용해서 출력을 해보았다.<br>

<h3>6-3_1</h3></br>

![스크린샷(92)](https://github.com/PM950704/Web-Programming/assets/127920204/d5babe8e-6981-49a3-b5c1-aaad5967e5dc)<br>

open_challenge와 동일하지만 입력을 받지 않고 출력한다.<br>

<h3>6-3_2</h3></br>

![스크린샷(93)](https://github.com/PM950704/Web-Programming/assets/127920204/f388760d-1858-4923-a86a-3147fd4b44e3)<br>

document.write()를 사용해서 표를 만들어보았다.<br>
태그 하나하나 생각을 해야해서 불편했다. HTML의 편리함에 진심으로 감사하게 되었다.<br>

<h3>6-4</h3></br>

![스크린샷(94)](https://github.com/PM950704/Web-Programming/assets/127920204/699e9c99-1b50-40e5-aaf6-2d5be20764fc)
![스크린샷(95)](https://github.com/PM950704/Web-Programming/assets/127920204/20ac2465-3781-400a-bb47-1f10bd02644b)<br>

입력 값이 월-목요일일 경우는 출근으로 다른 날일 경우는 휴일로 출력시켜주는 코드를 작성했다.(If문 사용)<br>


<h3>6-5</h3></br>

![스크린샷(96)](https://github.com/PM950704/Web-Programming/assets/127920204/9a5b8cd4-9077-4d75-85ea-7918e87556a2)<br>
![스크린샷(97)](https://github.com/PM950704/Web-Programming/assets/127920204/914e42b9-0dd0-4c36-aef1-786362c55f49)<br>

입력이 you일 경우에만 브라우저에 출력을 하고 아니면 계속해서 암호를 입력하는 창을 띄우는 코드이다.<br>
do while문을 이용하였다.<br>


<h3>6-6_1</h3></br>

![스크린샷(98)](https://github.com/PM950704/Web-Programming/assets/127920204/c09ecb43-5e49-40cd-a464-3f98b3eda0d0)<br>

big이라는 함수를 이용해서 함수에 입력한 두 문자열을 parseInt로 정수로 바꾼 뒤 비교해서 더 큰 수를 출력해주었다.<br>

<h3>6-6_2</h3></br>

![스크린샷(99)](https://github.com/PM950704/Web-Programming/assets/127920204/80ef58f9-d64e-498d-b25a-161fffbfcccb)<br>

pr 함수를 만들어 입력은 문자열과 정수를 받게 한 뒤 해당 문자열을 정수만큼 반복해서 출력하는 코드이다. <br>

<h3>6-7</h3></br>

![스크린샷(100)](https://github.com/PM950704/Web-Programming/assets/127920204/9dfd52b9-3d99-4fce-8787-6aa0e566b16e)
![스크린샷(101)](https://github.com/PM950704/Web-Programming/assets/127920204/2ba7b2ca-eceb-4fe4-9d2e-96f651186be8)<br>

가장 큰 자리수와 가장 작은 자리수를 비교하는 코드다.<br>
입력 숫자를 % 10하여 가장 큰 자리를 얻고, 가장 작은 자리수는 math.floor(num/10)을 이용해 변수에 저장한 뒤 두 숫자를 비교하였다.

<h3>6-8</h3></br>

![스크린샷(102)](https://github.com/PM950704/Web-Programming/assets/127920204/24f888a4-b100-4561-aa81-0a91db6ef6ed)<br>

eval 함수를 이용해 입력받은 문자열을 수식 계산하여 출력하였다.

