<?php

namespace App\Http\Controllers;

use App\Models\Buku; // Menambahkan pengimporan model Buku
use Illuminate\Http\Request;

class BlogController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $bukus = Buku::latest()->paginate(10); // Menggunakan model Buku
        return view('blog.index', compact('bukus')); //'bukus' merupakan inisialisasi dari model buku
    }
    /**
        * create
        *
        * @return void
        */
        public function create()
        {
            return view('blog.create');
        }


        /**
        * store
        *
        * @param  mixed $request
        * @return void
        */
    public function store(Request $request)
    {
    $this->validate($request, [
        'judul'     => 'required',
        'penulis'     => 'required',
        'harga'   => 'required',
        'tgl_terbit'   => 'required'
    ]);

    $bukus = Buku::create([
        'judul'     => $request->judul,
        'penulis'     => $request->penulis,
        'harga'   => $request->harga,
        'tgl_terbit'   => $request->tgl_terbit
    ]);

    if($bukus){
        //redirect dengan pesan sukses
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
    }
    /**
     * Edit a book.
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit(Buku $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
 * Update a book.
 *
 * @param  mixed $request
 * @param  mixed $blog
 * @return void
 */
public function update(Request $request, Buku $blog)
{
    $this->validate($request, [
        'judul'     => 'required',
        'penulis'     => 'required',
        'harga'   => 'required',
        'tgl_terbit'   => 'required'
    ]);

    // Retrieve the book by ID
    $buku = Buku::findOrFail($blog->id);

    // Update the book with the new data
    $blog->update([
        'judul'     => $request->judul,
        'penulis'     => $request->penulis,
        'harga'   => $request->harga,
        'tgl_terbit'   => $request->tgl_terbit
    ]);

    if ($blog) {
        // Redirect with a success message
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
    } else {
        // Redirect with an error message
        return redirect()->route('blog.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}
public function destroy($id)
{
  $bukus = Buku::findOrFail($id);
  $bukus->delete();

  if($bukus){
     //redirect dengan pesan sukses
     return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }else{
    //redirect dengan pesan error
    return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
  }
}

}