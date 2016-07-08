<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pet;

class PetController extends Controller
{

  public function __construct(){

    $this->middleware('auth:organization');

  }


  public function SelectPet()
{

  $petType = [
    'Dog' => 'Dog',
    'Cat' => 'Cat',
  ];

    $dogOptions = [

        'None' => 'None',
        'Affenpinscher' => 'Affenpinscher',
        'Afghan Hound' => 'Afghan Hound',
        'Airedale Terrier' => 'Airedale Terrier',
        'Akita' => 'Akita',
        'Alaskan Malamute' => 'Alaskan Malamute',
        'American English Coonhound' => 'American English Coonhound',
        'American Eskimo Dog (Miniature)' => 'American Eskimo Dog (Miniature)',
        'American Eskimo Dog (Standard)' => 'American Eskimo Dog (Standard)',
        'American Eskimo Dog (Toy)' => 'American Eskimo Dog (Toy)',
        'American Foxhound' => 'American Foxhound',
        'American Hairless Terrier' => 'American Hairless Terrier',
        'American Staffordshire Terrier' => 'American Staffordshire Terrier',
        'American Water Spaniel' => 'American Water Spaniel',
        'Anatolian Shepherd Dog' => 'Anatolian Shepherd Dog',
        'Australian Cattle Dog' => 'Australian Cattle Dog',
        'Australian Shepherd' => 'Australian Shepherd',
        'Australian Terrier' => 'Australian Terrier',
        'Borzoi' => 'Borzoi',
        'Basenji' => 'Basenji',
        'Basset Hound' => 'Basset Hound',
        'Beagle' => 'Beagle',
        'Bearded Collie' => 'Bearded Collie',
        'Beauceron' => 'Beauceron',
        'Bedlington Terrier' => 'Bedlington Terrier',
        'Belgian Malinois' => 'Belgian Malinois',
        'Belgian Sheepdog' => 'Belgian Sheepdog',
        'Belgian Tervuren' => 'Belgian Tervuren',
        'Bergamasco' => 'Bergamasco',
        'Berger Picard' => 'Berger Picard',
        'Bernese Mountain Dog' => 'Bernese Mountain Dog',
        'Bichon Frisé' => 'Bichon Frisé',
        'Black and Tan Coonhound' => 'Black and Tan Coonhound',
        'Black Russian Terrier' => 'Black Russian Terrier',
        'Bloodhound' => 'Bloodhound',
        'Bluetick Coonhound' => 'Bluetick Coonhound',
        'Boerboel' => 'Boerboel',
        'Border Collie' => 'Border Collie',
        'Border Terrier' => 'Border Terrier',
        'Borzoi' => 'Borzoi',
        'Boston Terrier' => 'Boston Terrier',
        'Bouvier des Flandres' => 'Bouvier des Flandres',
        'Boxer' => 'Boxer',
        'Boykin Spaniel' => 'Boykin Spaniel',
        'Briard' => 'Briard',
        'Brittany' => 'Brittany',
        'Brussels Griffon' => 'Brussels Griffon',
        'Bull Terrier' => 'Bull Terrier',
        'Bull Terrier (Miniature)' => 'Bull Terrier (Miniature)',
        'Bulldog' => 'Bulldog',
        'Bullmastiff' => 'Bullmastiff',
        'Clumber Spaniel' => 'Clumber Spaniel',
        'Cairn Terrier' => 'Cairn Terrier',
        'Canaan Dog' => 'Canaan Dog',
        'Cane Corso' => 'Cane Corso',
        'Cardigan Welsh Corgi' => 'Cardigan Welsh Corgi',
        'Cavalier King Charles Spaniel' => 'Cavalier King Charles Spaniel',
        'Cesky Terrier' => 'Cesky Terrier',
        'Chesapeake Bay Retriever' => 'Chesapeake Bay Retriever',
        'Chihuahua' => 'Chihuahua',
        'Chinese Crested Dog' => 'Chinese Crested Dog',
        'Chinese Shar Pei' => 'Chinese Shar Pei',
        'Chinook' => 'Chinook',
        'Chow Chow' => 'Chow Chow',
        'Cirneco dell Etna' => 'Cirneco dell Etna',
        'Clumber Spaniel' => 'Clumber Spaniel',
        'Cocker Spaniel' => 'Cocker Spaniel',
        'Collie' => 'Collie',
        'Coton de Tulear' => 'Coton de Tulear',
        'Curly-Coated Retriever' => 'Curly-Coated Retriever',
        'Dogue de Bordeaux' => 'Dogue de Bordeaux',
        'Dachshund' => 'Dachshund',
        'Dalmatian' => 'Dalmatian',
        'Dandie Dinmont Terrier' => 'Dandie Dinmont Terrier',
        'Doberman Pinscher' => 'Doberman Pinscher',
        'Dogue de Bordeaux' => 'Dogue de Bordeaux',
        'English Cocker Spaniel' => 'English Cocker Spaniel',
        'English Foxhound' => 'English Foxhound',
        'English Setter' => 'English Setter',
        'English Springer Spaniel' => 'English Springer Spaniel',
        'English Toy Spaniel' => 'English Toy Spaniel',
        'Entlebucher Mountain Dog' => 'Entlebucher Mountain Dog',
        'Field Spaniel' => 'Field Spaniel',
        'Field Spaniel' => 'Field Spaniel',
        'Finnish Lapphund' => 'Finnish Lapphund',
        'Finnish Spitz' => 'Finnish Spitz',
        'Flat-Coated Retriever' => 'Flat-Coated Retriever',
        'French Bulldog' => 'French Bulldog',
        'Greyhound' => 'Greyhound',
        'German Pinscher' => 'German Pinscher',
        'German Shepherd Dog' => 'German Shepherd Dog',
        'German Shorthaired Pointer' => 'German Shorthaired Pointer',
        'German Wirehaired Pointer' => 'German Wirehaired Pointer',
        'Giant Schnauzer' => 'Giant Schnauzer',
        'Glen of Imaal Terrier' => 'Glen of Imaal Terrier',
        'Golden Retriever' => 'Golden Retriever',
        'Gordon Setter' => 'Gordon Setter',
        'Great Dane' => 'Great Dane',
        'Great Pyrenees' => 'Great Pyrenees',
        'Greater Swiss Mountain Dog' => 'Greater Swiss Mountain Dog',
        'Greyhound' => 'Greyhound',
        'Harrier' => 'Harrier',
        'Havanese' => 'Havanese',
        'Irish Terrier' => 'Irish Terrier',
        'Ibizan Hound' => 'Ibizan Hound',
        'Icelandic Sheepdog' => 'Icelandic Sheepdog',
        'Irish Red and White Setter' => 'Irish Red and White Setter',
        'Irish Setter' => 'Irish Setter',
        'Irish Terrier' => 'Irish Terrier',
        'Irish Water Spaniel' => 'Irish Water Spaniel',
        'Irish Wolfhound' => 'Irish Wolfhound',
        'Italian Greyhound' => 'Italian Greyhound',
        'Japanese Chin' => 'Japanese Chin',
        'Keeshond' => 'Keeshond',
        'Kerry Blue Terrier' => 'Kerry Blue Terrier',
        'Komondor' => 'Komondor',
        'Kuvasz' => 'Kuvasz',
        'Labrador Retriever' => 'Labrador Retriever',
        'Labrador Retriever' => 'Labrador Retriever',
        'Lagotto Romagnolo' => 'Lagotto Romagnolo',
        'Lakeland Terrier' => 'Lakeland Terrier',
        'Leonberger' => 'Leonberger',
        'Lhasa Apso' => 'Lhasa Apso',
        'Löwchen' => 'Löwchen',
        'Miniature Schnauzer puppy' => 'Miniature Schnauzer puppy',
        'Maltese' => 'Maltese',
        'Manchester Terrier' => 'Manchester Terrier',
        'Mastiff' => 'Mastiff',
        'Miniature American Shepherd' => 'Miniature American Shepherd',
        'Miniature Bull Terrier' => 'Miniature Bull Terrier',
        'Miniature Pinscher' => 'Miniature Pinscher',
        'Miniature Schnauzer' => 'Miniature Schnauzer',
        'Nova Scotia Duck-Tolling Retriever' => 'Nova Scotia Duck-Tolling Retriever',
        'Neapolitan Mastiff' => 'Neapolitan Mastiff',
        'Newfoundland' => 'Newfoundland',
        'Norfolk Terrier' => 'Norfolk Terrier',
        'Norwegian Buhund' => 'Norwegian Buhund',
        'Norwegian Elkhound' => 'Norwegian Elkhound',
        'Norwegian Lundehund' => 'Norwegian Lundehund',
        'Norwich Terrier' => 'Norwich Terrier',
        'Nova Scotia Duck-Tolling Retriever' => 'Nova Scotia Duck-Tolling Retriever',
        'Old English Sheepdog' => 'Old English Sheepdog',
        'Otterhound' => 'Otterhound',
        'Pharaoh Hound' => 'Pharaoh Hound',
        'Papillon' => 'Papillon',
        'Parson Russell Terrier' => 'Parson Russell Terrier',
        'Pekingese' => 'Pekingese',
        'Pembroke Welsh Corgi' => 'Pembroke Welsh Corgi',
        'Petit Basset Griffon Vendéen' => 'Petit Basset Griffon Vendéen',
        'Pharaoh Hound' => 'Pharaoh Hound',
        'Plott' => 'Plott',
        'Pointer' => 'Pointer',
        'Polish Lowland Sheepdog' => 'Polish Lowland Sheepdog',
        'Pomeranian' => 'Pomeranian',
        'Poodle' => 'Poodle',
        'Portuguese Podengo Pequeno' => 'Portuguese Podengo Pequeno',
        'Portuguese Water Dog' => 'Portuguese Water Dog',
        'Pug' => 'Pug',
        'Puli' => 'Puli',
        'Pyrenean Shepherd' => 'Pyrenean Shepherd',
        'Rat Terrier' => 'Rat Terrier',
        'Redbone Coonhound' => 'Redbone Coonhound',
        'Rhodesian Ridgeback' => 'Rhodesian Ridgeback',
        'Rottweiler' => 'Rottweiler',
        'Russell Terrier' => 'Russell Terrier',
        'St. Bernard' => 'St. Bernard',
        'Saluki' => 'Saluki',
        'Samoyed' => 'Samoyed',
        'Schipperke' => 'Schipperke',
        'Scottish Deerhound' => 'Scottish Deerhound',
        'Scottish Terrier' => 'Scottish Terrier',
        'Sealyham Terrier' => 'Sealyham Terrier',
        'Shetland Sheepdog' => 'Shetland Sheepdog',
        'Shiba Inu' => 'Shiba Inu',
        'Shih Tzu' => 'Shih Tzu',
        'Siberian Husky' => 'Siberian Husky',
        'Silky Terrier' => 'Silky Terrier',
        'Skye Terrier' => 'Skye Terrier',
        'Sloughi' => 'Sloughi',
        'Smooth Fox Terrier' => 'Smooth Fox Terrier',
        'Soft-Coated Wheaten Terrier' => 'Soft-Coated Wheaten Terrier',
        'Spanish Water Dog' => 'Spanish Water Dog',
        'Spinone Italiano' => 'Spinone Italiano',
        'Staffordshire Bull Terrier' => 'Staffordshire Bull Terrier',
        'Standard Schnauzer' => 'Standard Schnauzer',
        'Sussex Spaniel' => 'Sussex Spaniel',
        'Swedish Vallhund' => 'Swedish Vallhund',
        'Tibetan Mastiff' => 'Tibetan Mastiff',
        'Tibetan Spaniel' => 'Tibetan Spaniel',
        'Tibetan Terrier' => 'Tibetan Terrier',
        'Toy Fox Terrier' => 'Toy Fox Terrier',
        'Treeing Walker Coonhound' => 'Treeing Walker Coonhound',
        'Vizsla' => 'Vizsla',
        'West Highland White Terrier' => 'West Highland White Terrier',
        'Weimaraner' => 'Weimaraner',
        'Welsh Springer Spaniel' => 'Welsh Springer Spaniel',
        'Welsh Terrier' => 'Welsh Terrier',
        'West Highland White Terrier' => 'West Highland White Terrier',
        'Whippet' => 'Whippet',
        'Wire Fox Terrier' => 'Wire Fox Terrier',
        'Wirehaired Pointing Griffon' => 'Wirehaired Pointing Griffon',
        'Wirehaired Vizsla' => 'Wirehaired Vizsla',
        'Xoloitzcuintli' => 'Xoloitzcuintli',
        'Yorkshire Terrier' => 'Yorkshire Terrier',

    ];

  $catOptions = [
    'None' => 'None',
    'Abyssinian' => 'Abyssinian',
    'Aegean' => 'Aegean',
    'American Curl' => 'American Curl',
    'American Bobtail' => 'American Bobtail',
    'American Shorthair' => 'American Shorthair',
    'American Wirehair' => 'American Wirehair',
    'Arabian Mau' => 'Arabian Mau',
    'Australian Mist' => 'Australian Mist',
    'Asian' => 'Asian',
    'Asian Semi-longhair' => 'Asian Semi-longhair',
    'Balinese' => 'Balinese',
    'Bambino' => 'Bambino',
    'Bengal' => 'Bengal',
    'Birman' => 'Birman',
    'Bombay' => 'Bombay',
    'Brazilian Shorthair' => 'Brazilian Shorthair',
    'British Semi-longhair' => 'British Semi-longhair',
    'British Shorthair' => 'British Shorthair',
    'British Longhair' => 'British Longhair',
    'Burmese' => 'Burmese',
    'Burmilla' => 'Burmilla',
    'California Spangled' => 'California Spangled',
    'Chantilly-Tiffany' => 'Chantilly-Tiffany',
    'Chartreux' => 'Chartreux',
    'Chausie' => 'Chausie',
    'Cheetoh' => 'Cheetoh',
    'Colorpoint Shorthair' => 'Colorpoint Shorthair',
    'Cornish Rex' => 'Cornish Rex',
    'Cymric' => 'Cymric',
    'Cyprus' => 'Cyprus',
    'Devon Rex' => 'Devon Rex',
    'Donskoy' => 'Donskoy',
    'Dragon Li' => 'Dragon Li',
    'Dwarf cat' => 'Dwarf cat',
    'Egyptian Mau' => 'Egyptian Mau',
    'European Shorthair' => 'European Shorthair',
    'Exotic Shorthair' => 'Exotic Shorthair',
    'Foldex Cat' => 'Foldex Cat',
    'German Rex' => 'German Rex',
    'Havana Brown' => 'Havana Brown',
    'Highlander' => 'Highlander',
    'Himalayan' => 'Himalayan',
    'Japanese Bobtail' => 'Japanese Bobtail',
    'Javanese' => 'Javanese',
    'Kurilian Bobtail' => 'Kurilian Bobtail',
    'Khao Manee' => 'Khao Manee',
    'Korat' => 'Korat',
    'Korean Bobtail' => 'Korean Bobtail',
    'Korn Ja' => 'Korn Ja',
    'LaPerm' => 'LaPerm',
    'Lykoi' => 'Lykoi',
    'Maine Coon' => 'Maine Coon',
    'Manx' => 'Manx',
    'Mekong Bobtail' => 'Mekong Bobtail',
    'Minskin' => 'Minskin',
    'Munchkin' => 'Munchkin',
    'Nebelung' => 'Nebelung',
    'Napoleon' => 'Napoleon',
    'Norwegian Forest Cat' => 'Norwegian Forest Cat',
    'Ocicat' => 'Ocicat',
    'Ojos Azules' => 'Ojos Azules',
    'Oregon Rex' => 'Oregon Rex',
    'Oriental Bicolor' => 'Oriental Bicolor',
    'Oriental Shorthair' => 'Oriental Shorthair',
    'Oriental Longhair' => 'Oriental Longhair',
    'Persian (Modern Persian Cat)' => 'Persian (Modern Persian Cat)',
    'Persian (Traditional Persian Cat)' => 'Persian (Traditional Persian Cat)',
    'Peterbald' => 'Peterbald',
    'Pixie-bob' => 'Pixie-bob',
    'Raas' => 'Raas',
    'Ragamuffin' => 'Ragamuffin',
    'Ragdoll' => 'Ragdoll',
    'Russian Blue' => 'Russian Blue',
    'Russian White, Black and Tabby' => 'Russian White, Black and Tabby',
    'Sam Sawet' => 'Sam Sawet',
    'Savannah' => 'Savannah',
    'Scottish Fold' => 'Scottish Fold',
    'Selkirk Rex' => 'Selkirk Rex',
    'Serengeti' => 'Serengeti',
    'Serrade petit' => 'Serrade petit',
    'Siamese' => 'Siamese',
    'Siberian' => 'Siberian',
    'Singapura' => 'Singapura',
    'Snowshoe' => 'Snowshoe',
    'Sokoke' => 'Sokoke',
    'Somali' => 'Somali',
    'Sphynx' => 'Sphynx',
    'Suphalak' => 'Suphalak',
    'Thai' => 'Thai',
    'Tonkinese' => 'Tonkinese',
    'Toyger' => 'Toyger',
    'Turkish Angora' => 'Turkish Angora',
    'Turkish Van' => 'Turkish Van',
    'Ukrainian Levkoy' => 'Ukrainian Levkoy',

  ];

    return view('pets.create', compact('dogOptions' , 'catOptions', 'petType'));

}


    public function index()
    {
        $pets = Pet::paginate(20);
        return view ('pets.index', compact('pets'));
    }


    public function create()
    {
        return view ('pets.create');
    }


    public function store(Request $request)
    {
        $data = $request->only(
          'description',
          'age',
          'pet_type',
          'size',
          'name',
          'breed'
      );
        $pets = Pet::create($data);
        return \Redirect::route('pets.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pet = Pet::find($id);

        return view('pets.edit', compact('pet'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->only(
        'name',
        'description',
        'age',
        'pet_type',
        'size'
        );
        $pets = Pet::find($id);
        $pets->update($data);
        return \Redirect::to('/pets');
    }

    public function destroy($id)
    {
      Pet::destroy($id);
      return \Redirect::to('/pets');

    }
}
