console.log("Ini external js");

let nilai = 60;
let judul = "Buku Menarik";

// const
const phi = 3.14;

nilai = 80;

// array
let barang = ["meja", "kursi", "lampu", "pintu"];

// object
let biodata = {
  nama: "Lina",
  umur: 20,
  alamat: "jalan jauh",
};

console.log(
  "Perkenalkan nama saya " +
    biodata.nama +
    " umur saya " +
    biodata.umur +
    ", saya tinggal di " +
    biodata.alamat
);

// console.log(30 + 7);
// console.log(30 - 7);
// console.log(30 * 7);
// console.log(30 / 7);
// console.log(4 % 2);

// for (let i = 1; i <= 10; i++) {
//   console.log(i);
// }

// for (let i = 10; i >= 1; i--) {
//     console.log(i);
// }

// barang.forEach((element) => {
//   console.log(element);
// });

nilai = 76;

if (nilai > 75) {
  console.log("Lulus");

  if (nilai > 80) {
    console.log("Nilai A");
  } else {
    console.log("Nilai B");
  }
} else {
  console.log("Gak Lulus");
}

if (nilai > 80) {
  console.log("Nilai Bagus");
} else if (nilai > 75) {
  console.log("Cukup Bagus");
} else {
  console.log("Belajar Lagi Ya");
}

let jawaban = "B";
let poin = 0;

switch (jawaban) {
  case "A":
    poin += 10;
    break;
  case "B":
    poin -= 1;
  default:
    poin -= 1;
    break;
}

// console.log(poin);

console.log(nilai > 75 ? "Bagus" : "Kurang");
