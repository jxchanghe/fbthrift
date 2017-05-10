<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift enum:-
 * Animal
 */
enum Animal: int {
  DOG = 1;
  CAT = 2;
  TARANTULA = 3;
}
type AnimalType = Animal;

/**
 * Original thrift struct:-
 * Color
 */
class Color implements \IThriftStruct {
  public static array $_TSPEC = array(
    1 => array(
      'var' => 'red',
      'type' => \TType::DOUBLE,
      ),
    2 => array(
      'var' => 'green',
      'type' => \TType::DOUBLE,
      ),
    3 => array(
      'var' => 'blue',
      'type' => \TType::DOUBLE,
      ),
    4 => array(
      'var' => 'alpha',
      'type' => \TType::DOUBLE,
      ),
    );
  public static Map<string, int> $_TFIELDMAP = Map {
    'red' => 1,
    'green' => 2,
    'blue' => 3,
    'alpha' => 4,
  };
  const int STRUCTURAL_ID = 5495510740722957663;
  /**
   * Original thrift field:-
   * 1: double red
   */
  public float $red;
  /**
   * Original thrift field:-
   * 2: double green
   */
  public float $green;
  /**
   * Original thrift field:-
   * 3: double blue
   */
  public float $blue;
  /**
   * Original thrift field:-
   * 4: double alpha
   */
  public float $alpha;

  public function __construct(?float $red = null, ?float $green = null, ?float $blue = null, ?float $alpha = null  ) {
    if ($red === null) {
      $this->red = 0.0;
    } else {
      $this->red = $red;
    }
    if ($green === null) {
      $this->green = 0.0;
    } else {
      $this->green = $green;
    }
    if ($blue === null) {
      $this->blue = 0.0;
    } else {
      $this->blue = $blue;
    }
    if ($alpha === null) {
      $this->alpha = 0.0;
    } else {
      $this->alpha = $alpha;
    }
  }

  public function getName(): string {
    return 'Color';
  }

  public function read(\TProtocol $input): int {
    $xfer = 0;
    $fname = '';
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == \TType::STOP) {
        break;
      }
      if (!$fid && $fname !== null) {
        $fid = (int) self::$_TFIELDMAP->get($fname);
        if ($fid !== 0) {
          $ftype = self::$_TSPEC[$fid]['type'];
        }
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == \TType::DOUBLE) {
            $xfer += $input->readDouble($this->red);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == \TType::DOUBLE) {
            $xfer += $input->readDouble($this->green);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == \TType::DOUBLE) {
            $xfer += $input->readDouble($this->blue);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == \TType::DOUBLE) {
            $xfer += $input->readDouble($this->alpha);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write(\TProtocol $output): int {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Color');
    if ($this->red !== null) {
      $_val0 = $this->red;
      $xfer += $output->writeFieldBegin('red', \TType::DOUBLE, 1);
      $xfer += $output->writeDouble($_val0);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->green !== null) {
      $_val1 = $this->green;
      $xfer += $output->writeFieldBegin('green', \TType::DOUBLE, 2);
      $xfer += $output->writeDouble($_val1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->blue !== null) {
      $_val2 = $this->blue;
      $xfer += $output->writeFieldBegin('blue', \TType::DOUBLE, 3);
      $xfer += $output->writeDouble($_val2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->alpha !== null) {
      $_val3 = $this->alpha;
      $xfer += $output->writeFieldBegin('alpha', \TType::DOUBLE, 4);
      $xfer += $output->writeDouble($_val3);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * Original thrift struct:-
 * Vehicle
 */
class Vehicle implements \IThriftStruct {
  public static array $_TSPEC = array(
    1 => array(
      'var' => 'color',
      'type' => \TType::STRUCT,
      'class' => 'Color',
      ),
    2 => array(
      'var' => 'licensePlate',
      'type' => \TType::STRING,
      ),
    3 => array(
      'var' => 'description',
      'type' => \TType::STRING,
      ),
    4 => array(
      'var' => 'name',
      'type' => \TType::STRING,
      ),
    5 => array(
      'var' => 'hasAC',
      'type' => \TType::BOOL,
      ),
    );
  public static Map<string, int> $_TFIELDMAP = Map {
    'color' => 1,
    'licensePlate' => 2,
    'description' => 3,
    'name' => 4,
    'hasAC' => 5,
  };
  const int STRUCTURAL_ID = 2222890000100114781;
  /**
   * Original thrift field:-
   * 1: struct module.Color color
   */
  public ?Color $color;
  /**
   * Original thrift field:-
   * 2: string licensePlate
   */
  public ?string $licensePlate;
  /**
   * Original thrift field:-
   * 3: string description
   */
  public ?string $description;
  /**
   * Original thrift field:-
   * 4: string name
   */
  public ?string $name;
  /**
   * Original thrift field:-
   * 5: bool hasAC
   */
  public bool $hasAC;

  public function __construct(?Color $color = null, ?string $licensePlate = null, ?string $description = null, ?string $name = null, ?bool $hasAC = null  ) {
    $this->color = $color;
    $this->licensePlate = $licensePlate;
    $this->description = $description;
    $this->name = $name;
    if ($hasAC === null) {
      $this->hasAC = false;
    } else {
      $this->hasAC = $hasAC;
    }
  }

  public function getName(): string {
    return 'Vehicle';
  }

  public function read(\TProtocol $input): int {
    $xfer = 0;
    $fname = '';
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == \TType::STOP) {
        break;
      }
      if (!$fid && $fname !== null) {
        $fid = (int) self::$_TFIELDMAP->get($fname);
        if ($fid !== 0) {
          $ftype = self::$_TSPEC[$fid]['type'];
        }
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == \TType::STRUCT) {
            $this->color = new Color();
            $xfer += $this->color->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == \TType::STRING) {
            $xfer += $input->readString($this->licensePlate);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == \TType::STRING) {
            $xfer += $input->readString($this->description);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == \TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == \TType::BOOL) {
            $xfer += $input->readBool($this->hasAC);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write(\TProtocol $output): int {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Vehicle');
    if ($this->color !== null) {
      $_val0 = $this->color;
      if (!($_val0 instanceof Color)) {
        throw new \TProtocolException('Bad type in structure.', \TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('color', \TType::STRUCT, 1);
      $xfer += $_val0->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->licensePlate !== null) {
      $_val1 = $this->licensePlate;
      $xfer += $output->writeFieldBegin('licensePlate', \TType::STRING, 2);
      $xfer += $output->writeString($_val1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->description !== null) {
      $_val2 = $this->description;
      $xfer += $output->writeFieldBegin('description', \TType::STRING, 3);
      $xfer += $output->writeString($_val2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $_val3 = $this->name;
      $xfer += $output->writeFieldBegin('name', \TType::STRING, 4);
      $xfer += $output->writeString($_val3);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasAC !== null && $this->hasAC !== false) {
      $_val4 = $this->hasAC;
      $xfer += $output->writeFieldBegin('hasAC', \TType::BOOL, 5);
      $xfer += $output->writeBool($_val4);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * Original thrift struct:-
 * Person
 */
class Person implements \IThriftStruct {
  public static array $_TSPEC = array(
    1 => array(
      'var' => 'id',
      'type' => \TType::I64,
      ),
    2 => array(
      'var' => 'name',
      'type' => \TType::STRING,
      ),
    3 => array(
      'var' => 'age',
      'type' => \TType::I16,
      ),
    4 => array(
      'var' => 'address',
      'type' => \TType::STRING,
      ),
    5 => array(
      'var' => 'favoriteColor',
      'type' => \TType::STRUCT,
      'class' => 'Color',
      ),
    6 => array(
      'var' => 'friends',
      'type' => \TType::SET,
      'etype' => \TType::I64,
      'elem' => array(
        'type' => \TType::I64,
        ),
        'format' => 'collection',
      ),
    7 => array(
      'var' => 'bestFriend',
      'type' => \TType::I64,
      ),
    8 => array(
      'var' => 'petNames',
      'type' => \TType::MAP,
      'ktype' => \TType::I32,
      'vtype' => \TType::STRING,
      'key' => array(
        'type' => \TType::I32,
        'enum' => 'Animal',
      ),
      'val' => array(
        'type' => \TType::STRING,
        ),
        'format' => 'collection',
      ),
    9 => array(
      'var' => 'afraidOfAnimal',
      'type' => \TType::I32,
      'enum' => 'Animal',
      ),
    10 => array(
      'var' => 'vehicles',
      'type' => \TType::LST,
      'etype' => \TType::STRUCT,
      'elem' => array(
        'type' => \TType::STRUCT,
        'class' => 'Vehicle',
        ),
        'format' => 'collection',
      ),
    );
  public static Map<string, int> $_TFIELDMAP = Map {
    'id' => 1,
    'name' => 2,
    'age' => 3,
    'address' => 4,
    'favoriteColor' => 5,
    'friends' => 6,
    'bestFriend' => 7,
    'petNames' => 8,
    'afraidOfAnimal' => 9,
    'vehicles' => 10,
  };
  const int STRUCTURAL_ID = 5615342512964403351;
  /**
   * Original thrift field:-
   * 1: i64 id
   */
  public int $id;
  /**
   * Original thrift field:-
   * 2: string name
   */
  public string $name;
  /**
   * Original thrift field:-
   * 3: i16 age
   */
  public ?int $age;
  /**
   * Original thrift field:-
   * 4: string address
   */
  public ?string $address;
  /**
   * Original thrift field:-
   * 5: struct module.Color favoriteColor
   */
  public ?Color $favoriteColor;
  /**
   * Original thrift field:-
   * 6: set<i64> friends
   */
  public ?Set<int> $friends;
  /**
   * Original thrift field:-
   * 7: i64 bestFriend
   */
  public ?int $bestFriend;
  /**
   * Original thrift field:-
   * 8: map<enum module.Animal, string> petNames
   */
  public ?Map<Animal, string> $petNames;
  /**
   * Original thrift field:-
   * 9: enum module.Animal afraidOfAnimal
   */
  public ?Animal $afraidOfAnimal;
  /**
   * Original thrift field:-
   * 10: list<struct module.Vehicle> vehicles
   */
  public ?Vector<Vehicle> $vehicles;

  public function __construct(?int $id = null, ?string $name = null, ?int $age = null, ?string $address = null, ?Color $favoriteColor = null, ?Set<int> $friends = null, ?int $bestFriend = null, ?Map<Animal, string> $petNames = null, ?Animal $afraidOfAnimal = null, ?Vector<Vehicle> $vehicles = null  ) {
    if ($id === null) {
      $this->id = 0;
    } else {
      $this->id = $id;
    }
    if ($name === null) {
      $this->name = '';
    } else {
      $this->name = $name;
    }
    $this->age = $age;
    $this->address = $address;
    $this->favoriteColor = $favoriteColor;
    $this->friends = $friends;
    $this->bestFriend = $bestFriend;
    $this->petNames = $petNames;
    $this->afraidOfAnimal = $afraidOfAnimal;
    $this->vehicles = $vehicles;
  }

  public function getName(): string {
    return 'Person';
  }

  public function read(\TProtocol $input): int {
    $xfer = 0;
    $fname = '';
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == \TType::STOP) {
        break;
      }
      if (!$fid && $fname !== null) {
        $fid = (int) self::$_TFIELDMAP->get($fname);
        if ($fid !== 0) {
          $ftype = self::$_TSPEC[$fid]['type'];
        }
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == \TType::I64) {
            $xfer += $input->readI64($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == \TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == \TType::I16) {
            $xfer += $input->readI16($this->age);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == \TType::STRING) {
            $xfer += $input->readString($this->address);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == \TType::STRUCT) {
            $this->favoriteColor = new Color();
            $xfer += $this->favoriteColor->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == \TType::SET) {
            $_size1 = 0;
            $_etype4 = 0;
            $_val0 = Set{};
            $xfer += $input->readSetBegin($_etype4, $_size1);
            for ($_i5 = 0; $_size1 === null || $_i5 < $_size1; ++$_i5)
            {
              if ($_size1 === null && !$input->readSetHasNext()) {
                break;
              }
              $elem6 = null;
              $xfer += $input->readI64($elem6);
              if ($elem6 !== null) {
                $_val0->add($elem6);
              }
            }
            $xfer += $input->readSetEnd();
            $this->friends = $_val0;
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == \TType::I64) {
            $xfer += $input->readI64($this->bestFriend);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == \TType::MAP) {
            $_size8 = 0;
            $_val7 = Map {};
            $_ktype9 = 0;
            $_vtype10 = 0;
            $xfer += $input->readMapBegin($_ktype9, $_vtype10, $_size8);
            for ($_i12 = 0; $_size8 === null || $_i12 < $_size8; ++$_i12)
            {
              if ($_size8 === null && !$input->readMapHasNext()) {
                break;
              }
              $_val15 = null;
              $xfer += $input->readI32($_val15);
              $key13 = Animal::coerce($_val15);

              $val14 = null;
              $xfer += $input->readString($val14);
              if ($key13 !== null && $val14 !== null) {
                $_val7[$key13] = $val14;
              }
            }
            $xfer += $input->readMapEnd();
            $this->petNames = $_val7;
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == \TType::I32) {
            $_val16 = null;
            $xfer += $input->readI32($_val16);
            $this->afraidOfAnimal = Animal::coerce($_val16);

          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == \TType::LST) {
            $_size18 = 0;
            $_val17 = Vector {};
            $_etype21 = 0;
            $xfer += $input->readListBegin($_etype21, $_size18);
            for ($_i22 = 0; $_size18 === null || $_i22 < $_size18; ++$_i22)
            {
              if ($_size18 === null && !$input->readListHasNext()) {
                break;
              }
              $elem23 = new Vehicle();
              $xfer += $elem23->read($input);
              if ($elem23 !== null) {
                $_val17 []= $elem23;
              }
            }
            $xfer += $input->readListEnd();
            $this->vehicles = $_val17;
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write(\TProtocol $output): int {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Person');
    if ($this->id !== null) {
      $_val0 = $this->id;
      $xfer += $output->writeFieldBegin('id', \TType::I64, 1);
      $xfer += $output->writeI64($_val0);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $_val1 = $this->name;
      $xfer += $output->writeFieldBegin('name', \TType::STRING, 2);
      $xfer += $output->writeString($_val1);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->age !== null) {
      $_val2 = $this->age;
      $xfer += $output->writeFieldBegin('age', \TType::I16, 3);
      $xfer += $output->writeI16($_val2);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->address !== null) {
      $_val3 = $this->address;
      $xfer += $output->writeFieldBegin('address', \TType::STRING, 4);
      $xfer += $output->writeString($_val3);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->favoriteColor !== null) {
      $_val4 = $this->favoriteColor;
      if (!($_val4 instanceof Color)) {
        throw new \TProtocolException('Bad type in structure.', \TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('favoriteColor', \TType::STRUCT, 5);
      $xfer += $_val4->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->friends !== null) {
      $_val5 = $this->friends;
      if (!($_val5 instanceof Set)) {
        throw new \TProtocolException('Bad type in structure.', \TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('friends', \TType::SET, 6);
      $output->writeSetBegin(\TType::I64, count($_val5));
      if ($_val5 !== null)
      {
        foreach ($_val5 as $iter6)
        {
          $xfer += $output->writeI64($iter6);
        }
      }
      $output->writeSetEnd();
      $xfer += $output->writeFieldEnd();
    }
    if ($this->bestFriend !== null) {
      $_val7 = $this->bestFriend;
      $xfer += $output->writeFieldBegin('bestFriend', \TType::I64, 7);
      $xfer += $output->writeI64($_val7);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->petNames !== null) {
      $_val8 = $this->petNames;
      if (!($_val8 instanceof \Indexish) && !(($_val8 instanceof \Iterator || $_val8 instanceof \IteratorAggregate) && $_val8 instanceof \Countable)) {
        throw new \TProtocolException('Bad type in structure.', \TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('petNames', \TType::MAP, 8);
      $output->writeMapBegin(\TType::I32, \TType::STRING, count($_val8));
      if ($_val8 !== null)
      {
        foreach ($_val8 as $kiter9 => $viter10)
        {
          $xfer += $output->writeI32($kiter9);
          $xfer += $output->writeString($viter10);
        }
      }
      $output->writeMapEnd();
      $xfer += $output->writeFieldEnd();
    }
    if ($this->afraidOfAnimal !== null) {
      $_val11 = Animal::assert($this->afraidOfAnimal);
      $xfer += $output->writeFieldBegin('afraidOfAnimal', \TType::I32, 9);
      $xfer += $output->writeI32($_val11);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->vehicles !== null) {
      $_val12 = $this->vehicles;
      if (!($_val12 instanceof \Indexish) && !(($_val12 instanceof \Iterator || $_val12 instanceof \IteratorAggregate) && $_val12 instanceof \Countable)) {
        throw new \TProtocolException('Bad type in structure.', \TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('vehicles', \TType::LST, 10);
      $output->writeListBegin(\TType::STRUCT, count($_val12));
      if ($_val12 !== null)
      {
        foreach ($_val12 as $iter13)
        {
          $xfer += $iter13->write($output);
        }
      }
      $output->writeListEnd();
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

