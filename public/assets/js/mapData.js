const mapData = {
    /*DBD: {
        options: [
            {
                value: "kasus_dbd",
                text: "Kasus DBD",
                legends: {
                    tinggi: "rgb(255, 34, 0)",
                    sedang: "rgb(250, 114, 90)",
                    rendah: "rgb(255, 204, 204)",
                },
            },
            {
                value: "kepadatan_penduduk",
                text: "Kepadatan Penduduk",
                legends: {
                    "sangat tinggi": "rgb(107, 0, 0)",
                    tinggi: "rgb(173, 83, 19)",
                    sedang: "rgb(242, 167, 46)",
                    rendah: "rgb(250, 209, 85)",
                    "sangat rendah": "rgb(255, 255, 128)",
                },
            },
            {
                value: "suhu",
                text: "Suhu",
                legends: {
                    tinggi: "rgb(255, 34, 0)",
                    sedang: "rgb(255, 255, 0)",
                    rendah: "rgb(85, 255, 0)",
                },
            },
            {
                value: "kelembapan",
                text: "Kelembapan",
                legends: {
                    tinggi: "rgb(255, 34, 0)",
                    sedang: "rgb(255, 255, 0)",
                    rendah: "rgb(85, 255, 0)",
                },
            },
            {
                value: "curah_hujan",
                text: "Curah Hujan",
                legends: {
                    tinggi: "rgb(255, 34, 0)",
                    sedang: "rgb(255, 255, 0)",
                    rendah: "rgb(85, 255, 0)",
                },
            },
        ],
    },*/
    HIV: {
        options: [
            {
                value: "kasus_hiv",
                text: "Kasus HIV",
                legends: {
                    "sangat tinggi": "rgb(250, 7, 7)",
                    tinggi: "rgb(250, 60, 7)",
                    sedang: "rgb(235, 100, 70)",
                    rendah: "rgb(242, 174, 157)",
                    "sangat rendah": "rgb(245, 207, 198)",
                },
            },
            {
                value: "tuna_susila",
                text: "Tuna Susila",
                legends: {
                    "sangat tinggi": "rgb(107, 0, 0)",
                    tinggi: "rgb(173, 83, 19)",
                    sedang: "rgb(242, 167, 46)",
                    rendah: "rgb(250, 209, 85)",
                    "sangat rendah": "rgb(255, 255, 128)",
                },
            },
            {
                value: "penduduk_miskin",
                text: "Penduduk Miskin",
                legends: {
                    "sangat tinggi": "rgb(107, 0, 0)",
                    tinggi: "rgb(173, 83, 19)",
                    sedang: "rgb(242, 167, 46)",
                    rendah: "rgb(250, 209, 85)",
                    "sangat rendah": "rgb(255, 255, 128)",
                },
            },
            {
                value: "hotspot",
                text: "Hotspot HIV",
                legends: {
                    "hot spot area": "rgb(250, 7, 7)",
                    "netral area": "rgb(217, 222, 222)",
                    "cold spot area": "rgb(133, 166, 155)",
                },
            },
            {
                value: "lokasi_rawan_tuna_susila",
                text: "Lokasi Rawan Tuna Susila",
                legends: {
                    rawan: "rgb(107, 0, 0)",
                    "tidak rawan": "rgb(255, 255, 128)",
                },
            },
            {
                value: "penduduk_lakilaki_usia_produktif",
                text: "Penduduk Laki-Laki Usia Produktif",
                legends: {
                    "sangat tinggi": "rgb(107, 0, 0)",
                    tinggi: "rgb(173, 83, 19)",
                    sedang: "rgb(242, 167, 46)",
                    rendah: "rgb(250, 209, 85)",
                    "sangat rendah": "rgb(255, 255, 128)",
                },
            },
            {
                value: "wilayah_rentan_hiv",
                text: "Wilayah Rentan HIV",
                legends: {
                    "sangat tinggi": "rgb(250, 7, 7)",
                    tinggi: "rgb(250, 60, 7)",
                    sedang: "rgb(235, 100, 70)",
                    rendah: "rgb(242, 174, 157)",
                    "sangat rendah": "rgb(245, 207, 198)",
                },
            },
            {
                value: "kepadatan_penduduk",
                text: "Jumlah Penduduk",
                legends: {
                    "sangat tinggi": "rgb(107, 0, 0)",
                    tinggi: "rgb(173, 83, 19)",
                    sedang: "rgb(242, 167, 46)",
                    rendah: "rgb(250, 209, 85)",
                    "sangat rendah": "rgb(255, 255, 128)",
                },
            },
            {
                value: "faskes_hiv",
                text: "Faskes PDP HIV",
            },
        ],
    },
    /*ISPA: {
        options: [
            {
                value: "kasus_ispa",
                text: "Kasus ISPA",
                legends: {
                    tinggi: "rgb(255, 34, 0)",
                    sedang: "rgb(250, 114, 90)",
                    rendah: "rgb(255, 204, 204)",
                },
            },
            {
                value: "kepadatan_penduduk",
                text: "Kepadatan Penduduk",
                legends: {
                    tinggi: "rgb(173, 83, 19)",
                    sedang: "rgb(242, 167, 46)",
                    rendah: "rgb(250,209,85)",
                },
            },
            {
                value: "suhu",
                text: "Suhu",
                legends: {
                    tinggi: "rgb(240, 118, 5)",
                    sedang: "rgb(255, 173, 102)",
                    rendah: "rgb(255, 235, 204)",
                },
            },
            {
                value: "kelembapan",
                text: "Kelembapan",
                legends: {
                    tinggi: "rgb(14, 204, 14)",
                    sedang: "rgb(123, 232, 111)",
                    rendah: "rgb(204, 255, 204)",
                },
            },
            {
                value: "curah_hujan",
                text: "Curah Hujan",
                legends: {
                    tinggi: "rgb(255, 34, 0)",
                    sedang: "rgb(255, 255, 0)",
                    rendah: "rgb(85,255,0)",
                },
            },
        ],
    },*/
};

const monthMapping = {
    1: "Januari",
    2: "Februari",
    3: "Maret",
    4: "April",
    5: "Mei",
    6: "Juni",
    7: "Juli",
    8: "Agustus",
    9: "September",
    10: "Oktober",
    11: "November",
    12: "Desember",
};
