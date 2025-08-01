<?php
class EventNode {
    public $image;
    public $title;
    public $date;
    public $description;
    public $next;
    
    public function __construct($image, $title, $date, $description) {
        $this->image = $image;
        $this->title = $title;
        $this->date = $date;
        $this->description = $description;
        $this->next = null;
    }
}

class EventList {
    public $head = null;
    public $tail = null;
    public $current = null;
    
    public function addEvent($image, $title, $date, $description) {
        $newNode = new EventNode($image, $title, $date, $description);
        
        if (!$this->head) {
            // List kosong - node pertama
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->current = $newNode; // Initialize current
            $newNode->next = $newNode; // Point ke dirinya sendiri
        } else {
            // Tambah node baru
            $this->tail->next = $newNode;
            $newNode->next = $this->head; // Point ke head (circular)
            $this->tail = $newNode;
        }
    }
    
    public function getCurrentEvent() {
        if (!$this->current && $this->head) {
            $this->current = $this->head;
        }
        return $this->current;
    }
    
    public function getNextEvent() {
        if (!$this->current && $this->head) {
            $this->current = $this->head;
        }
        
        if ($this->current) {
            $this->current = $this->current->next;
        }
        
        return $this->current;
    }
    
    public function getPreviousEvent() {
        if (!$this->current && $this->head) {
            $this->current = $this->head;
        }
        
        if (!$this->current || !$this->head) {
            return null;
        }
        
        // Jika hanya 1 node
        if ($this->head === $this->tail) {
            return $this->current;
        }
        
        // Cari node sebelum current
        $temp = $this->head;
        while ($temp->next !== $this->current) {
            $temp = $temp->next;
        }
        
        $this->current = $temp;
        return $this->current;
    }
    
    // Debug function untuk testing
    public function printAll() {
        if (!$this->head) return "List kosong";
        
        $result = [];
        $temp = $this->head;
        do {
            $result[] = $temp->title;
            $temp = $temp->next;
        } while ($temp !== $this->head);
        
        return implode(" -> ", $result) . " -> (kembali ke head)";
    }
}
?>