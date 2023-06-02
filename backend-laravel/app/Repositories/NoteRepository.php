<?php

namespace App\Repositories;

use App\Models\Note;

class NoteRepository
{
    public function index()
    {
        try {
            $per_page = request()->per_page ?? 10;
            $search = request()->search;

            $notes = Note::when($search, function($query) use ($search) {
                $query->where("title", "like" , "%$search%");
                $query->orWhere("description", "like" , "%$search%");
            })->latest()->paginate($per_page);;

            return $notes;

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function create($req)
    {
        $create = Note::create([
            'title'         => $req->title,
            'description'   => $req->description,
        ]);

        return $create;
    }

    public function fetch($id)
    {
        $note = Note::findOrFail($id);
        return $note;
    }

    public function update($req, $id)
    {
        $fetch = $this->fetch($id);

        $update = $fetch->update([
            'title'         => $req->title,
            'description'   => $req->description,
        ]);

        return $update;
    }

    public function delete($id)
    {
        $fetch = $this->fetch($id);

        $delete = $fetch->delete($id);

        return $delete;
    }
}