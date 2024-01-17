Basic JS

- Perbedaan var, let, cons

    - var 
    Variabel yang dideklarasikan dengan var memiliki cakupan fungsi (function scope). 
    Artinya, variabel tersebut hanya dapat diakses di dalam fungsi tempat ia dideklarasikan.
    Jika variabel dideklarasikan di luar fungsi, ia menjadi variabel global.
    var tidak terpengaruh oleh blok scope, sehingga ia dapat diakses di luar blok tempat ia dideklarasikan.
    var dapat diinisialisasi tanpa nilai awal, dan JavaScript memberinya nilai undefined secara otomatis.

    - let 
    Variabel yang dideklarasikan dengan let memiliki cakupan blok (block scope), 
    artinya hanya dapat diakses di dalam blok tempat ia dideklarasikan.
    let tidak dapat diakses sebelum deklarasinya (hoisting).
    Nilai dari variabel let bisa diubah (mutability).

    - const 
    Variabel yang dideklarasikan dengan const juga memiliki cakupan blok (block scope).
    Nilai dari variabel const harus diinisialisasi pada saat deklarasi 
    dan tidak dapat diubah setelahnya (immutability).
    const tidak dapat diakses sebelum deklarasinya (hoisting).

- memanipulasi html dengan DOM (document object model)
    - getElementById
    - querySelectorAll element
    - querySelectorAll class
    - fetch file json
    - convert data to table rows

- BMI calculator
    - goals
        - menghitung BMI = berat badan / (Tinggi badan * tinggi badan)
        - misal BB = 70  dan TB = 175
        - maka rumusnya (70 / (175 * 175)) * 10000
        - kategory BMI 
            - BMI kurang dari 18.5: Kurang berat badan.
            - BMI 18.5 - 24.9: Berat badan normal (22 disarankan).
            - BMI 25 - 29.9: Berlebihan berat badan.
            - BMI 30 atau lebih: Obesitas.
        - mencari berat badan yg ideal sesuai dari tinggi badan
            - (22 * (175 * 175)) / 10000
    - challenges 
        - berat badan dan tinggi badan harus integer / number
    - constraints
        - projek hanya berfokus pada 
            - menghitung BMI
            - mencari BMI berdasarkan tinggi
    - solutions 
        - membuat sistem dengan tampilan sederhana 
