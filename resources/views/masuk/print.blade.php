<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Print Disposisi</title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif">
    <div align="center">
        <table width="750px" border="0" cellpadding="0" cellspacing="0">

            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                        <td width="19%" align="center"><img src="{{ asset('img/kop.png') }}" height="90" /></td>
                        <td width="81%" align="center"><span style="font-size:18px;font-weight:bold">PEMERINTAH
                                KABUPATEN PONOROGO</span><br />
                            <span style="font-size:23px;font-weight:bold">DINAS KOMUNIKASI INFORMATIKA DAN
                                STATISTIK</span><br />
                            <span style="font-size:16px;">Jalan. Ir. Juanda Nomor 198, Telp. (0352) 3592999, Kode Pos:
                                63412</span><br />
                            <span style="font-size:18px;font-weight:bold;"><u>PONOROGO</u></span>
                        </td>
                    </tr>

                </table>
            </td>
            </tr>
            <tr>
                <td align="center" style="font-size:18px"><br /><b>
                        LEMBAR DISPOSISI</b></td>
            </tr>
            <tr>
                <td>
                    <table width="100%" cellpadding="3" cellspacing="0" style=" border:solid 1px #000000">
                        <tr valign="top">
                            <td width="18%" style="border:solid 1px #000">Surat Dari </td>
                            <td width="42%" style="border:solid 1px #000"><b>{{ $data->pengirim }}</b></td>
                            <td width="18%" style="border:solid 1px #000">Diterima Tanggal </td>
                            <td width="22%" style="border:solid 1px #000">{{ konversiTanggal($data->masuk) }}</td>
                        </tr>
                        <tr valign="top">
                            <td style="border:solid 1px #000">Tanggal Surat </td>
                            <td style="border:solid 1px #000">{{ konversiTanggal($data->tanggal) }} </td>
                            <td style="border:solid 1px #000">Nomor Agenda </td>
                            <td style="border:solid 1px #000">{{ $data->no_urut }}</td>
                        </tr>
                        <tr valign="top">
                            <td style="border:solid 1px #000">Nomor Surat </td>
                            <td style="border:solid 1px #000">{{ $data->no_surat }}</td>
                            <td colspan="2" style="border:solid 1px #000">
                                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr>
                                        <td colspan="4">Sifat : </td>
                                    </tr>
                                    <tr>
                                        <td width="1%"><img src="{{ asset('img/square.png') }}" width="22"
                                                height="17" /></td>
                                        <td width="52%">Sangat Rahasia </td>
                                        <td width="1%"><img src="{{ asset('img/square.png') }}" width="22"
                                                height="17" /></td>
                                        <td width="33%">Segera</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/square.png') }}" width="22" height="17" /></td>
                                        <td>Rahasia</td>
                                        <td><img src="{{ asset('img/square.png') }}" width="22" height="17" /></td>
                                        <td>Biasa</td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td style="border:solid 1px #000">Perihal</td>
                            <td colspan="3" style="border:solid 1px #000;">{{ $data->perihal }} </td>
                        </tr>
                        <tr valign="top">
                            <td colspan="2" style="border:solid 1px #000">
                                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr>
                                        <td colspan="2">Diteruskan Kepada Yth. Sdr. : </td>
                                    </tr>
                                    <tr>
                                        <td width="1%"><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" /></td>
                                        <td>Sekretaris</td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" />
                                        </td>
                                        <td>Kabid Statistik dan Persandian </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" />
                                        </td>
                                        <td>Kabid Pengelolaan Informasi dan Komunikasi Publik </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" />
                                        </td>
                                        <td>Kabid Aplikasi dan Informatika </td>
                                    </tr>
                                </table>
                            </td>
                            <td colspan="2" style="border:solid 1px #000">
                                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                    <tr>
                                        <td colspan="2">Dengan Hormat Harap : </td>
                                    </tr>
                                    <tr>
                                        <td width="1%"><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" /></td>
                                        <td>Tanggapan dan Saran </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" /></td>
                                        <td>Proses Lebih Lanjut </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ asset('img/square.png') }}" alt="x" width="22"
                                                height="17" /></td>
                                        <td>Koordinasi/Konfirmasi</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td colspan="4" style="border:solid 1px #000" align="center" valign="top"><b>ISI DISPOSISI
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                </b></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        window.print();

    </script>
</body>

</html>
